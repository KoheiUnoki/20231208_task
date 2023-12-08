<?php

$position =0;

if(isset($_POST["submitButton"])){
    $position=$_POST["position"];
}
?>



<form class="formWrapper" method="POST"> 
                <div>
                    <input type="submit" value="書き込む" name="submitButton">
                    <label>名前</label>
                    <input type="text" name="username">
                    <input type="hidden" name="threadID" value="<?php echo $thread["id"];?>">
                </div>
                <div>
                    <textarea class="commentArea" name="body"></textarea>
                </div>
                <!-- 位置取得用 -->
                <input type="hidden" name="position" value="0">
</form>

<!-- jQueryのコードを先に読み込む -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    // console.log($(window).scrollTop());
    $(document).ready(()=>{
        $("input[type=submit]").click(()=>{
            // 現在のスクロール位置を取得
            let position = $(window).scrollTop();  
            $("input:hidden[name=position]").val(position);    
        })
        $(window).scrollTop(<?php echo $position;?>);
    })
</script>