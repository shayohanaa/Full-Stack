<?php include 'assets/config.php'; ?>
<?php 
    session_start();
    if(isset($_SESSION['user_id'])) {
        $userId = $_SESSION['user_id'];
    } elseif(isset($_COOKIE['user_id'])) {
        $userId = $_COOKIE['user_id'];
        $username = $_COOKIE['username'];
        $email = $_COOKIE['email'];
    } else {
        $userId = NULL;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cypher Hosting - Web Solutions.</title>
</head>
<body>
    <div class="container">
        <div class="header" id="header">
            <?php include 'header.php'; ?>
        </div>
        <div class="section text-center">
            <div class="hero">
                <h1>Welcome to Cypher Hosting</h1>
                <p>Reliable, fast, and secure web hosting solutions for your business</p>
                <a href="#pricingtable" class="cta-button getstarted">Get Started</a>
                <a href="#pricingtable" class="cta-button pricingandplans">Pricing & Plans</a>
                <p style="color: #c09bff; transform:scale(1.1);">Enjoy 15% OFF for your first purchase.</p>
            </div>
        </div>
        <div class="section text-center" id="pricingtable">
            <h1 class="pricingtitle">Pricing & Packages</h1>
            <div class="Pricingtables">
                <div class="table">
                    <h3>Starter Package</h3>
                    <p>for small businesses</p>
                    <h2 style="font-family: 'Times New Roman', Times, serif;">$ 9.99/mo</h2>
                    <ul class="features">
                        <li>WordPress Builder</li>
                        <li>24/7 Support</li>
                        <li>Free SSL Certificate</li>
                        <li>99.9% Uptime Guarantee</li>
                        <li>Unlimited Bandwidth</li>
                        <li>Daily Backups</li>
                        <li>Free Domain Registration</li>
                        <li>One-Click App Installer</li>
                        <li>cPanel Access</li>
                        <li>Unlimited Email Accounts</li>
                        <li>Cloud Storage</li>
                        <li>Website Analytics</li>
                        <li>SEO Tools</li>
                        <li>Free Website Migration</li>
                        <li>Multiple Data Centers</li>
                        <li>Advanced Security Features</li>
                        <li>Managed Hosting</li>
                        <li>Developer Tools</li>
                        <li>30-Day Money-Back Guarantee</li>
                    </ul>
                    <button class="button hostnow">Host now</button>
                </div>
                <div class="table recommended">
                    <h3>Advanced Package</h3>
                    <p>for mid-sized businesses</p>
                    <h2 style="font-family: 'Times New Roman', Times, serif;">$ 14.99/mo</h2>
                    <ul class="features">
                        <li>WordPress Builder</li>
                        <li>24/7 Support</li>
                        <li>Free SSL Certificate</li>
                        <li>99.9% Uptime Guarantee</li>
                        <li>Unlimited Bandwidth</li>
                        <li>Daily Backups</li>
                        <li>Free Domain Registration</li>
                        <li>One-Click App Installer</li>
                        <li>cPanel Access</li>
                        <li>Unlimited Email Accounts</li>
                        <li>Cloud Storage</li>
                        <li>Website Analytics</li>
                        <li>SEO Tools</li>
                        <li>Free Website Migration</li>
                        <li>Multiple Data Centers</li>
                        <li>Advanced Security Features</li>
                        <li>Managed Hosting</li>
                        <li>Developer Tools</li>
                        <li>30-Day Money-Back Guarantee</li>
                    </ul>
                    <button class="button hostnow">Host now</button>
                </div>
                <div class="table">
                    <h3>Professional Package</h3>
                    <p>for big companies</p>
                    <h2 style="font-family: 'Times New Roman', Times, serif;">$ 21.99/mo</h2>
                    <ul class="features">
                        <li>WordPress Builder</li>
                        <li>24/7 Support</li>
                        <li>Free SSL Certificate</li>
                        <li>99.9% Uptime Guarantee</li>
                        <li>Unlimited Bandwidth</li>
                        <li>Daily Backups</li>
                        <li>Free Domain Registration</li>
                        <li>One-Click App Installer</li>
                        <li>cPanel Access</li>
                        <li>Unlimited Email Accounts</li>
                        <li>Cloud Storage</li>
                        <li>Website Analytics</li>
                        <li>SEO Tools</li>
                        <li>Free Website Migration</li>
                        <li>Multiple Data Centers</li>
                        <li>Advanced Security Features</li>
                        <li>Managed Hosting</li>
                        <li>Developer Tools</li>
                        <li>30-Day Money-Back Guarantee</li>
                    </ul>
                    <button class="button hostnow">Host now</button>
                </div>
            </div>
        </div>
        <div class="footer">
            <?php include 'footer.php'; ?>
        </div>
    </div>
</body>
</html>