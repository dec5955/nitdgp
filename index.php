<!Doctype HTML>
<html>
<head>
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="main.css">
</head>
<body>
	<div class='wrapper'>
		<div class='header-container'>
			<div class='logo-container'>
				<div class='logo'>
				</div>
			</div>
			<div class='top-strip'>
				<i class='fa fa-facebook'></i>
				<i class='fa fa-twitter'></i>
				<i class='fa fa-google-plus'></i>
				<i class='fa fa-linkedin'></i>
			</div>
			<div class='mid-strip'>
				National Institute of Technology, Durgapur
			</div>
			<div class='bottom-strip'>

			</div>
		</div>
        <div class='content-container'>
        	<div class='student-notice-board-container'>
        		<div class='student-notice-board-header'>
        		Student Notice Board
        			<hr>
        		</div>
        		<ul>
        			<li>
        		    <div class='student-notice-board-content'>
        			<?php
                                 $url = "http://www.nitdgp.ac.in/all_pdf16/Hostel_Allotment.zip";
                                 $fh = fopen(basename($url), "wb");
                                 $ch = curl_init($url);
                                 curl_setopt($ch, CURLOPT_FILE, $fh);
                                 curl_exec($ch);
                                 curl_close($ch);
                                 rename('Hostel_Allotment.zip', '1.zip');
                                ?>
                                <a href="1.zip" target='_blank'> Hostel Allotment 2016</a>
        		    </div>
        		    </li>
        		    <li>
        		    <div class='student-notice-board-content'>
        			Notice 2
        		    </div>
        		    </li>
        	    </ul>
        	</div>
        	<div class='result-container'>
        		<div class='result-content'>
        		</div>
        	</div>
        </div>
	</div>	
</body>
</html>