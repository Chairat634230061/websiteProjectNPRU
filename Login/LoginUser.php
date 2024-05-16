<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php 
    session_start();
    require_once "server.php" ;
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เข้าสู่ระบบผู้กู้ยืม</title>
    <link rel="stylesheet" href="Login.css">
    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200&family=Mitr:wght@300&family=Prompt:wght@300&display=swap" rel="stylesheet">

    


    
</head>
<body>
    <div class="container">
        <div class="left-box">
            <h1 class="npru_h1">เข้าสู่ระบบผู้กู้ยืม</h1>
            <!-- ส่วนซ้าย -->
            <form action="db-user.php" method="post">
                <div class="user-box">
                    <label for="studentID" >รหัสนักศึกษา</label>
                    <input type="text" name='studentID'class="npru-input">
            </div>
                <div class="user-box">
                    <label for="email" >อีเมลผู้กู้ยืม</label>
                    <input type="text" name='email' class="npru-input">
                </div>
                <div class="user-box">
                    <label for="password" >รหัสผ่าน</label>
                    <input type="password" name='password'class="npru-input">
            </div>
            <div class="user-box">
                <button type="submit" name='LoginUser' class="npru-button">เข้าสู่ระบบผู้กู้ยืม</button>
            </div>
        </form>
    </div>
    



    <!-- SweetAlert2 -->
    <script>
        <?php if(isset($_SESSION['error'])) : ?>
            $(document).ready(function() {
                Swal.fire({
                    icon: 'error',
                    text: '<?php echo $_SESSION['error']; ?>',
                });
            });
            <?php unset($_SESSION['error']); ?>
        <?php endif ?>
    </script>
    
    <div class="right-box">
        <!-- ส่วนขวา -->
        <img src="../img/npru-48.jpg" alt="npru" class="npruhome">
    </div>
</div>

<!-- FONT -->
<style> 
    @import url('https://fonts.googleapis.com/css2?family=Kanit:wght@200&family=Mitr:wght@300&family=Prompt:wght@300&display=swap');
</style>
</body>
</html>