/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 50612
 Source Host           : localhost:3306
 Source Schema         : register

 Target Server Type    : MySQL
 Target Server Version : 50612
 File Encoding         : 65001

 Date: 17/06/2020 20:21:00
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `userName` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` char(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `sex` char(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `interests` char(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `my_picture` char(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `remark` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  PRIMARY KEY (`user_id`) USING BTREE,
  UNIQUE INDEX `userName`(`userName`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, '12', '12', '男', '音乐', '', '');
INSERT INTO `users` VALUES (2, '17', '17', '男', '游戏', '', '');
INSERT INTO `users` VALUES (3, '18', '18', '女', '游戏', '', '');
INSERT INTO `users` VALUES (4, '20', '20', '男', '游戏', '', '');
INSERT INTO `users` VALUES (5, '99', '99', '男', '游戏', '', '');
INSERT INTO `users` VALUES (6, '67', '67', '男', '游戏', '', '');
INSERT INTO `users` VALUES (7, '56', '56', '女', '音乐', '', '');
INSERT INTO `users` VALUES (8, '43', '43', '男', '', '', '');
INSERT INTO `users` VALUES (9, '00', '00', '男', '', '', '');
INSERT INTO `users` VALUES (10, '01', '01', '男', '', '', '');
INSERT INTO `users` VALUES (11, 'ly', '123', '男', '音乐', '', '');
INSERT INTO `users` VALUES (12, 'yu', '123', '男', '', '', '');

SET FOREIGN_KEY_CHECKS = 1;
