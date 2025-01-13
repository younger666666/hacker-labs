<?php
echo "<pre>";
echo "root:x:0:0:root:/root:/bin/bash\n";
echo "daemon:x:1:1:daemon:/usr/sbin:/bin/sh\n";
echo "bin:x:2:2:bin:/bin:/bin/sh\n";
echo "sys:x:3:3:sys:/dev:/bin/sh\n";
echo "sync:x:4:65534:sync:/bin:/bin/sync\n";
echo "games:x:5:60:games:/usr/games:/bin/sh\n";
echo "man:x:6:12:man:/var/cache/man:/bin/sh\n";
echo "lp:x:7:7:lp:/var/spool/lpd:/bin/sh\n";
echo "mail:x:8:8:mail:/var/mail:/bin/sh\n";
echo "news:x:9:9:news:/var/spool/news:/bin/sh\n";
echo "uucp:x:10:10:uucp:/var/spool/uucp:/bin/sh\n";
echo "proxy:x:13:13:proxy:/bin:/bin/sh\n";
echo "www-data:x:33:33:www-data:/var/www:/bin/sh\n";
echo "backup:x:34:34:backup:/var/backups:/bin/sh\n";
echo "list:x:38:38:Mailing List Manager:/var/list:/bin/sh\n";
echo "irc:x:39:39:ircd:/var/run/ircd:/bin/sh\n";
echo "gnats:x:41:41:Gnats Bug-Reporting System:/var/lib/gnats:/bin/sh\n";
echo "nobody:x:65534:65534:nobody:/nonexistent:/bin/sh\n";
echo "systemd-network:x:999:999:systemd Network Management:/run/systemd/network:/bin/bash\n";
echo "systemd-resolve:x:1000:1000:systemd Resolver:/run/systemd/resolve:/bin/bash\n";
echo "</pre>";
?>
