<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wit Register</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

    <div class="account-card">
        <div class="card-header">
            <h2>Create Account</h2>
        </div>

        <form class="account-form" action="register.php" method="POST">
            <!-- Row 1: Names -->
            <div class="form-row">
                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" name="firstname" required>
                </div>
                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" name="lastname" required>
                </div>
            </div>

            <!-- Row 2: Age & Gender (Using your radio buttons) -->
            <div class="form-row">
                <div class="form-group">
                    <label>Age</label>
                    <input type="number" name="age">
                </div>
                <div class="form-group">
                    <label>Gender</label>
                    <select name="gender" required>
                        <option value="" disabled selected>Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                        <option value="prefer_not_to_say">Prefer not to say</option>
                    </select>
                </div>
            </div>

            <!-- Row 3: Address -->
            <div class="form-row full-width">
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="address" required>
                </div>
            </div>

            <!-- Row 4: Email & Username -->
            <div class="form-row">
                <div class="form-group">
                    <label>Email</label>
                    <div class="input-with-icon">
                        <i class="fa-regular fa-envelope left-icon"></i>
                        <input type="email" name="email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <div class="input-with-icon">
                        <i class="fa-regular fa-circle-user left-icon"></i>
                        <input type="text" name="username" required>
                    </div>
                </div>
            </div>

            <!-- Row 5: Passwords -->
            <div class="form-row">
                <div class="form-group">
                    <label>Password</label>
                    <div class="input-with-icon">
                        <i class="fa-solid fa-lock left-icon"></i>
                        <input type="password" name="password" required>
                    </div>
                </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <div class="input-with-icon">
                        <i class="fa-solid fa-lock left-icon"></i>
                        <input type="password" name="confirm_password" required>
                    </div>
                </div>
            </div>

            <button type="submit" name="register" class="submit-btn">Register</button>
            
            <p class="login-link">Do you already have an account? <a href="login.php">Login here.</a></p>
        </form>
    </div>

</body>
</html>