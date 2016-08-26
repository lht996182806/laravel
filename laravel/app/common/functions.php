<?php 
        function test(){
            echo 123;
        }
		function showStatus($data){
            switch ($data) {
                case '1':
                    return  '未激活';
                break;
                case '2':
                    return  '正常状态';
                break;
                
            }

        }
 ?>