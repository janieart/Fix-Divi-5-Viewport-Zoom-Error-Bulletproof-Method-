# Fix-Divi-5-Viewport-Zoom-Error-Bulletproof-Method-


How to Fix the Divi 5 Viewport Zoom Error (Bulletproof Method)
Important: This method requires access to your WordPress site’s filesystem. You must be able to upload files to the /wp-content/mu-plugins/ directory via SFTP, SSH, or your hosting control panel. Users who only have access to the WordPress admin dashboard cannot use MU plugins.

If you’ve been using Divi 5, you might have run into this frustrating error during your speed tests:

“Disabling zooming is problematic for users with low vision…”

I know I did. No matter what I tried in my child theme or functions.php, Divi just kept printing its own viewport tag. Zooming was blocked, and Lighthouse kept flagging it as an accessibility problem.

After some digging, I found the only method that actually works  and it’s surprisingly simple.


Why this happens
Divi 5 now injects the viewport meta tag after your theme code runs, which is why normal fixes don’t work.
The issue is with maximum-scale=1.0 and user-scalable=no. They prevent users from zooming — which is bad for accessibility.


The fix I used: a Must-Use Plugin that you can get here.
https://janieart.com/how-to-fix-the-divi-5-viewport-zoom-error-bulletproof-method/

