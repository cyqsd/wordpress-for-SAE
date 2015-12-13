<?php
         @session_start();
         $pass = 'cyqsd.cn';
        
         function check_login(){
                 if(!isset($_SESSION['admin'])){
                         echo "<script>window.location.href='saekv.php?a=index'</script>";
                         exit;
                 }               
         }       
         $kv = new SaeKV();       
         $ret = $kv->init();

        $a = isset($_GET['a'])?$_GET['a']:'index';
         $k = isset($_REQUEST['k'])?$_REQUEST['k']:'';
         $v = isset($_POST['v'])?$_POST['v']:'';
?>
<title>SAE KVDB Manager - Powered By actphp.com</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<div id="header">
         <h3>SAE KVDB 管理面板</h3>
         <a href="saekv.php?a=set">SET</a> | <a href="saekv.php?a=get">GET</a>  | <a href="saekv.php?a=del">DEL</a>  | <a href="saekv.php?a=allkv">ALL KV</a>   | <a href="saekv.php?a=logout">Logout</a>
</div>
<?php       
         if($a == 'index'){
                 echo '<form action="?a=login" method="post">密码:'."<input type='passwd' name='passwd' value='' /><br /><input type='submit' name='submit' value='登录' /><br /></form>";

        }else if($a == 'login'){
                 $passwd = isset($_POST['passwd'])?$_POST['passwd']:'';
                 if($passwd == $pass ){
                         $_SESSION['admin'] = 1;
                 }
                 echo "<script>window.location.href='saekv.php?a=allkv'</script>";
         }else if($a == 'set'){
                 check_login();
                 if(!empty($k) && !empty($v) ){
                         $kv->set($k,$v);
                         echo "<p>设置成功:{$k} => {$v}</p>";
                 }else{
                 $v = $kv->get($k)
?>
                         <form action="saekv.php?a=set" name="setform" method="post">
                                 <p>  Key:<input type="text" name="k" value="<?=$k?>" /></p>
                                 <p>Value:<textarea rows="8" name="v"><?=$v?></textarea>
                                 <p>    <input type="submit"  value="设置" /></p>
                         </form>
<?php
                 }
         }else if ($a == 'get'){
                 check_login();
                 if(!empty($k)){
                         if(@file_exists('saekv://'.$k)){
                                 echo "<p>取值成功:{$k} => <pre>";
                                 echo htmlspecialchars(file_get_contents('saekv://'.$k));
                                 echo "</pre></p>";
                         }else{
                                 $v = $kv->get($k);
                                 if($v !== false){
                                         echo "<p>取值成功:{$k} => <pre>";
                                         if(is_array($v)){                                       
                                                 print_r($v);
                                         }else if(is_string($v)){
                                                 echo $v;
                                         }else{
                                                 var_dump($v);
                                         }
                                         echo "</pre></p>";
                                 }else{
                                         echo "<p>{$k}不存在！</p>";
                                 }
                         }
                        
                 }else{
?>
                         <form action="saekv.php?a=get" name="setform" method="post">
                                 <p>  Key:<input type="text" name="k" value="" /></p>
                                 <p>    <input type="submit"  value="获得" /></p>
                         </form>

<?php
                 }
         }else if($a == 'del'){
                 check_login();
                 if(!empty($k) ){
                         $v = $kv->delete($k);
                         echo "<p>K:{$k}删除成功！</p>";
                        
                 }else if(!empty($_GET['k'])){
                         $v = $kv->delete($_GET['k']);
                         echo "<p>K:{$_GET['k']}删除成功！</p>";
                        
                 }
                 else{
?>
                         <form action="saekv.php?a=del" name="setform" method="post">
                                 <p>  Key:<input type="text" name="k" value="" /></p>
                                 <p>    <input type="submit"  value="删除" /></p>
                         </form>

<?php               
                 }
         }else if ($a =='allkv'){
                 check_login();
                 $ret = $kv->pkrget('', 100);    
                 while (true) {                   
                         foreach($ret as $k=>$v)
                                 echo "<p>K：{$k} <a href=\"saekv.php?a=get&k={$k}\">GET</a> | <a href=\"saekv.php?a=set&k={$k}\">Set</a> | <a href=\"saekv.php?a=del&k={$k}\" onclick=\"return confirm('确认删除？');\" style='color:red;'>DEL</a></p>";
                         end($ret);                               
                         $start_key = key($ret);
                         $i = count($ret);
                         if ($i < 100) break;
                         $ret = $kv->pkrget('', 100, $start_key);
                 }

        }else if ($a =='logout'){
                 @session_destroy();
                 echo "<script>window.location.href='saekv.php?a=index'</script>";
         }
?>