const path = require("path");
const Uglify = require("uglifyjs-webpack-plugin");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const autoprefixer = require("autoprefixer");
const webpack = require("webpack")
const Dotenv = require("dotenv-webpack");


// const ExtractTextPlugin = require("extract-text-webpack-plugin");
// const extractScss = new ExtractTextPlugin({
//   filename: "../css/[name].min.css"
// });
module.exports = {
  entry: "./src/index.js",
  plugins: [
    new Uglify(),
    require("autoprefixer"),
    new MiniCssExtractPlugin({
      filename: "css/[name].css",
      chunkFilename: "[id].css"
    }),
    new webpack.ProvidePlugin({
      $: "jquery",
      jQuery: "jquery"
    }),
    new Dotenv()
  ],
  output: {
    filename: "bundle.js",
    path: path.resolve(__dirname, "dist")
  },
  module: {
    rules: [{
        test: /\.js$/,
        exclude: /(node_modules)/,
        use: {
          loader: "babel-loader",
          options: {
            presets: ["babel-preset-env"]
          }
        }
      },
      {
        test: /.(sa|sc|c)ss$/,
        use: [{
            loader: "style-loader"
          },
          {
            loader: MiniCssExtractPlugin.loader,
            options: {
              publicPath: "../",
              hmr: process.env.NODE_ENV === "development"
            }
          },
          {
            loader: "css-loader",
            options: {
              sourceMap: true
            }
          },
          {
            loader: "postcss-loader",
            options: {
              sourceMap: true,
              plugins: () => [autoprefixer],
              config: {
                path: "postcss.config.js"
              }
            }
          },
          {
            loader: "sass-loader",
            options: {
              sourceMap: true
            }
          }
        ]
      },
      // {
      //   test: /\.s[ac]ss$/i,
      //   use: [
      //     // Creates `style` nodes from JS strings
      //     "style-loader",
      //     // Translates CSS into CommonJS
      //     "css-loader",
      //     // Compiles Sass to CSS
      //     "sass-loader"
      //   ]
      // },
      {
        test: /\.(woff|woff2|eot|ttf|svg)$/,
        loader: "file-loader",
        options: {
          name: "[name].[ext]?[hash]",
          outputPath: "./fonts"
        }
      },
      {
        test: /\.(jpe?g|png|gif)$/,
        loader: "url-loader",
        options: {
          // Images larger than 10 KB won’t be inlined
          limit: 10 * 1024,
          name: "[name].[ext]?[hash]",
          outputPath: "./img"
        }
      }
    ]
  },
  watch: true
};