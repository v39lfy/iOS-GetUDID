<?php
/**
 * Created by PhpStorm.
 * User: fuyouli
 * Date: 16/3/8
 * Time: 下午2:25
 */

header('Content-Type: application/x-apple-aspen-config');
?>

<?echo '<?';?>
xml version="1.0" encoding="UTF-8"
<?echo '?>';?>
<!DOCTYPE plist PUBLIC "-//Apple//DTD PLIST 1.0//EN" "http://www.apple.com/DTDs/PropertyList-1.0.dtd">
<plist version="1.0">
    <dict>
        <key>PayloadContent</key>
        <dict>
            <key>URL</key>
            <string>http://udid.onlywish.me/recvudid.php?redirect=udid.onlywish.me</string>
            <key>DeviceAttributes</key>
            <array>
                <string>DEVICE_NAME</string>
                <string>UDID</string>
                <string>PRODUCT</string>
                <string>VERSION</string>
                <string>SERIAL</string>
            </array>
        </dict>
        <key>PayloadOrganization</key>
        <string>OnlyWish Inc.</string>
        <key>PayloadDisplayName</key>
        <string>Profile Service</string>
        <key>PayloadVersion</key>
        <integer>1</integer>
        <key>PayloadUUID</key>
        <string>C5FB9D0D-0BE7-4F98-82CC-5D0EA74F8CF9</string> <!-- any random UUID -->
        <key>PayloadIdentifier</key>
        <string>udid.onlywish.blog.profile-service</string>
        <key>PayloadDescription</key>
        <string>服务器不会记录您的任何信息,只是方便获取并且展示出来,后面的密码为手机的解锁密码</string>
        <key>PayloadType</key>
        <string>Profile Service</string>
    </dict>
</plist>