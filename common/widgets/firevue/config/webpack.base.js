


// 公共配置
const path = require('path');

const PATHS = {
    source: path.join(__dirname, '../app'),
    build: path.join(__dirname, '../src')
};

const webpack = require('webpack')
// const glob = require('glob')
const VueLoaderPlugin = require('vue-loader/lib/plugin');
const HtmlWebpackPlugin = require('html-webpack-plugin');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const UglifyJsPlugin = require('uglifyjs-webpack-plugin')
const OptimizeCSSAssetsPlugin = require('optimize-css-assets-webpack-plugin')
const CopyWebpackPlugin = require('copy-webpack-plugin');
const RuntimePublicPathPlugin = require('webpack-runtime-public-path-plugin')    

module.exports = {
    entry:{
        build:PATHS.source+'/app.js',//vue基础文件包
        require:PATHS.source+'/require.js',//vue基础文件包
        echartsThem:PATHS.source+'/echarts/echartsThem.js',
        // easyCron:PATHS.source+'/components/easy-cron/index.js'
    },
    output: {
        path: PATHS.build,
        filename: 'js/[name].js',
        chunkFilename:'js/lib/[name].js',
        libraryTarget: "umd",
        library: "[name]"
    },
    performance: {
        hints:'warning',
        //入口起点的最大体积
        maxEntrypointSize: 50000000,
        //生成文件的最大体积
        maxAssetSize: 30000000,
        //只给出 js 文件的性能提示
        assetFilter: function(assetFilename) {
            return assetFilename.endsWith('.js');
        }
    },
    // 提取公共模块
    optimization: {
        splitChunks: {
            chunks: 'all',//默认只作用于异步模块，为`all`时对所有模块生效,`initial`对同步模块有效
            minSize: 30000,//合并前模块文件的体积
            minChunks: 1,//最少被引用次数
            maxAsyncRequests: 5,
            maxInitialRequests: 3,
            automaticNameDelimiter: '~',//自动命名连接符
            cacheGroups: {
                vendors: {
                test: '/[\\/]node_modules[\\/]/',
                minChunks:1,//敲黑板
                priority: -10//优先级更高
                },
                default: {
                test: '/[\\/]src[\\/]js[\\/]/',
                minChunks: 2,//一般为非第三方公共模块
                priority: -20,
                reuseExistingChunk: true
                }
            },
        },
        runtimeChunk:{
            name:'manifest'
        },
        minimizer: [
            new UglifyJsPlugin({
                // sourceMap: true,
                // exclude: /node_modules/,
                uglifyOptions: {
                    compress: { properties: false },
                    output: { quote_keys: true }, // 保留对象key引号
                    mangle: false,
                    ie8: true // 保留支持ie8的代码
                }
            })
        ]
    },
    plugins: [
        new VueLoaderPlugin(),
        new OptimizeCSSAssetsPlugin(),
        new CleanWebpackPlugin(),
        new HtmlWebpackPlugin({
            title: 'webpack',
            template: PATHS.build+'/index.html',
        }),
        new MiniCssExtractPlugin({
            filename: 'css/[name].css',
        }),
        new webpack.ProvidePlugin({
            $: 'jquery',
            jQuery: 'jquery'
        }),
    ],
    module: {
        rules: [
            {
                test: /\.css$/,
                use: [
                    {
                        loader: MiniCssExtractPlugin.loader,
                        options: {
                            publicPath: '../'
                        },
                    },
                    'css-loader', {
                        loader: 'postcss-loader',
                        options: {
                            plugins: () => [
                                require('autoprefixer')({
                                    overrideBrowserslist: ['last 2 version', '>1%', 'ios 7']
                                })
                            ]
                        }
                    }
                ]
            },
            {
                test: /\.s[ac]ss$/i,
                use: [
                  "style-loader",
                  "css-loader",
                  {
                    loader: "sass-loader",
                    options: {
                      implementation: require("sass"),
                      sassOptions: {
                        fiber: false,
                      },
                    },
                  },
                ],
            },
            {
                test: /\.less$/,
                use: [
                    {
                        loader: MiniCssExtractPlugin.loader,
                        options: {
                            publicPath: '../'
                        },
                    },
                    'css-loader', {
                        loader: 'postcss-loader',
                        options: {
                            plugins: () => [
                                require('autoprefixer')({
                                    overrideBrowserslist: ['last 2 version', '>1%', 'ios 7']
                                })
                            ]
                        }
                    }, 'less-loader'
                ]
            },
            {
                test: /\.(png|svg|jpg|gif)$/,
                use: [
                    {
                        loader: 'url-loader',
                        options: {
                            limit: 8 * 1024, // 小于8k压缩base64
                            name: '[name].[ext]', // 原文件名输出
                            publicPath: '../images/',
                            outputPath: 'images/',
                            esModule: false
                        }
                    }

                ]
            },
            {
                test: /\.(woff|woff2|eot|ttf|otf)$/,
                use: [
                    'file-loader'
                ]
            },
            {
                test: /\.(csv|tsv)$/,
                use: [
                    'csv-loader'
                ]
            },
            {
                test: /\.xml$/,
                use: [
                    'xml-loader'
                ]
            },
            {
                test: /\.js$/,
                exclude: /(node_modules|bower_components)/,
                use: {
                    loader: 'babel-loader',
                    options: {
                        presets: ['@babel/preset-env'],
                        plugins: [
                            '@babel/plugin-transform-runtime',
                            '@babel/plugin-transform-modules-commonjs'
                        ]
                    }
                }
            },
            {
                test: /\.vue$/,
                use: ['vue-loader']
            }
        ]
    },
    resolve: {
        extensions: [
          '.vue', '.js'
        ],
        // modules: ["node_modules"],
        alias: {
            'vue$': 'vue/dist/vue.min.js',
            '@': path.join(__dirname, '../'),
            'firevue/app': path.join(__dirname, '../app'),
            'firevue/utli': path.join(__dirname, '../app/utli'),
            'firevue/components': path.join(__dirname, '../app/components'),
            'firevue/src': path.join(__dirname, '../src'),
            'firevue/api': path.join(__dirname, '../app/api'),
            'firevue/styles': path.join(__dirname, '../app/styles')
        }
    }
};