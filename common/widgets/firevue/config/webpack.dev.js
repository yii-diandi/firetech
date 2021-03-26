// 开发配置

const path = require('path');

const base = require('./webpack.base.js')
// 导入合并包
const merge = require('webpack-merge')

module.exports = merge(base,{
    // mode:'production',
    mode:'development',  // 不压缩js
    devtool: 'inline-source-map', // 错误追踪
    devServer: {
        port:8080,
        contentBase: path.join(__dirname, '../dev'),
        disableHostCheck: true
    }
})