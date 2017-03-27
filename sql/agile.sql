/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : agile

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2017-03-04 19:31:01
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `catalog`
-- ----------------------------
DROP TABLE IF EXISTS `catalog`;
CREATE TABLE `catalog` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '归属目录编号',
  `name` varchar(50) DEFAULT NULL COMMENT '归属目录名称',
  `absolute` varchar(50) DEFAULT NULL COMMENT '归属目录简写代号',
  `addtime` int(11) DEFAULT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of catalog
-- ----------------------------

-- ----------------------------
-- Table structure for `content`
-- ----------------------------
DROP TABLE IF EXISTS `content`;
CREATE TABLE `content` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '内容',
  `title` varchar(255) DEFAULT NULL COMMENT '内容标题',
  `content` text COMMENT '内容',
  `coverimg` varchar(255) DEFAULT NULL COMMENT '封面图片',
  `img` varchar(255) DEFAULT NULL COMMENT '图片',
  `tags` varchar(255) DEFAULT NULL COMMENT '标签',
  `class` varchar(255) DEFAULT NULL COMMENT '分类名称',
  `classid` int(11) DEFAULT NULL COMMENT '分类编号',
  `catalog` varchar(255) DEFAULT NULL COMMENT '归属目录名称',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of content
-- ----------------------------

-- ----------------------------
-- Table structure for `file`
-- ----------------------------
DROP TABLE IF EXISTS `file`;
CREATE TABLE `file` (
  `id` int(11) NOT NULL DEFAULT '0' COMMENT '附件',
  `filename` varchar(255) DEFAULT NULL,
  `filepath` varchar(255) DEFAULT NULL COMMENT '附件路径',
  `suffix` varchar(255) DEFAULT NULL COMMENT '文件后缀',
  `size` varchar(255) DEFAULT NULL COMMENT '文件大小',
  `addtime` int(11) DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of file
-- ----------------------------

-- ----------------------------
-- Table structure for `infoclass`
-- ----------------------------
DROP TABLE IF EXISTS `infoclass`;
CREATE TABLE `infoclass` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '分类编号',
  `bigclassid` int(11) DEFAULT NULL COMMENT '大类编号(为0，则是一级分类)',
  `bigclassname` varchar(50) DEFAULT NULL COMMENT '大类名称(为空，则是一级分类)',
  `name` varchar(50) DEFAULT NULL COMMENT '分类名称',
  `catalogid` int(11) DEFAULT NULL COMMENT '归属目录编号',
  `catalog` varchar(255) DEFAULT NULL COMMENT '归属目录',
  `addupdate` int(11) DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of infoclass
-- ----------------------------
