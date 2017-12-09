/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  KhairulIkram
 * Created: 29-Nov-2017
 */


-- Create SQL Table Structure for New Users --
CREATE TABLE IF NOT EXISTS 'users' (
    'id' int(11) NOT NULL AUTO_INCREMENT,
    'username' varchar(255) NOT NULL,
    'firstname' varchar(255) NOT NULL,
    'surname' varchar(255) NOT NULL,
    'email' varchar(255) NOT NULL,
    'password' varchar(32) NOT NULL,
    'sign_up_date' date NOT NULL,
    'activated' enum('0','1') NOT NULL,
PRIMARY KEY ('id')
) ENGINE*InnoDB DEFAULT CHARSET*latin1 AUTO_INCREMENT*1 ;
