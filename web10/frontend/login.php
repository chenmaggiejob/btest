 <fieldset>
     <legend>會員登入</legend>
     <!-- table>tr*3>td*2 -->
     <table>
         <tr>
             <td>帳號</td>
             <!-- input:text -->
             <td><input type="text" name="acc" id="acc"></td>
         </tr>
         <tr>
             <td>密碼</td>
             <!-- input:password -->
             <td><input type="password" name="pw" id="pw"></td>
         </tr>
         <tr>
             <td>
                 <!-- button*2 -->
                 <button onclick="login()">登入</button>
                 <button onclick="clear()">清除</button>
             </td>
             <td>
                 <!-- a*2 -->
                 <a href="?do=forgot">忘記密碼</a>
                 <a href="?do=reg">尚未註冊</a>
             </td>
         </tr>
     </table>
 </fieldset>

 <script>
    function login() {

    }
    function clear() {
        
    }
 </script>