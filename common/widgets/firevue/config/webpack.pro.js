//  生产配置 production
// 开发配置
const path = require('path');

const base = require('./webpack.base.js')
// 导入合并包
const merge = require('webpack-merge')

module.exports = merge(base,{
    mode:'production',
    stats: { children: false }

})
