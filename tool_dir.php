<?php 
    header("Content-type:text/html;charset=utf-8");
    $str="13852130918
bjfswj
sjzjlfy
dcxcwdy888";
  // //复制粘贴文件
  // foreach (explode("\n",$str) as $key => $value) {
  //     echo 'xcopy /y  E:\a E:\wbycms\\'.trim($value).' /e /i';
  //     echo '<br>';
  // }

   //数据库操作
    foreach (explode("\n",$str) as $key => $value) {
        echo 'UPDATE  `'.trim($value).'`.`wby_seting` SET  `value` = \'<a href="http://www.wubaiyi.com/">伍佰亿</a>提供：<a href="http://wubaiyi.cn/" target="_blank">网站建设</a><br/><script type="text/javascript" src="http://www.wubaiyi.com/sou/support/cooperation_pic1_qrcode.js"></script>\' WHERE  `wby_seting`.`key` =  \'support\';
';
    }

 //复制数据库回到各自的项目中
    // foreach (explode("\n",$str) as $key => $value) {
    //     echo 'xcopy /y E:\factory\Mysql\201-251\wbycms'.trim($value).'  E:\factory\201-251\\'.trim($value).'\wbycms'.trim($value).' /i /e';
    //     echo '<br>';
    // }
// foreach (explode("\n",$str) as $key => $value) {
//     echo 'xcopy /y G:\mb\update3.0.9\include G:\mb\cms\\'.trim($value).'\include /e /i';
//     echo '</br>';
//     echo 'xcopy /y G:\mb\update3.0.9\wubaiyi G:\mb\cms\\'.trim($value).'\wubaiyi /e /i';
//     echo '</br>';
//     echo 'xcopy /y G:\mb\update3.0.9\date\wby_admin_group.frm   G:\mb\cms\\'.trim($value).'\wbycms'.trim($value).' /e /i';
//     echo '</br>';
//     echo 'xcopy /y G:\mb\update3.0.9\date\wby_admin_group.MYD   G:\mb\cms\\'.trim($value).'\wbycms'.trim($value).' /e /i';
//     echo '</br>';
//     echo 'xcopy /y G:\mb\update3.0.9\date\wby_admin_group.MYI   G:\mb\cms\\'.trim($value).'\wbycms'.trim($value).' /e /i';
//     echo '</br>';
// }
    // 重命名文件夹
    // $str =explode("\n",$str);
    // shuffle($str);
    // foreach ($str as $key => $value) {
    //   echo 'ren D:\works\\'.trim($value).'  '.($value+100);
    //   echo '<br/>';
    // }
    //插入数据库
    // $str =explode("\n",$str);
   // shuffle($str);
    // foreach (explode("\n",$str) as $key => $value) {
    //   echo 'use wby'.trim($value).';';
    //   echo '<br/>';
    //   echo '<br/>';
    // }

   // foreach (explode("\n",$str) as $key => $value) {
   //    echo 'move  "'.trim($value).'" "E:\下载\moveweb\";';
   //    echo '</br>';
   //  }

?>