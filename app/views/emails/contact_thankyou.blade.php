<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<style>
		    .msg-body {
    		    background-color: #d3d3d3;
    		    border: 1px solid #444;
    		    border-radius: 3px;
    		    padding: 10px;
		    }		
		</style>
	    <h2>Hey, {{ Input::get('name') }}, thank you for contacting</h2>
        <img src="http://filemakerwebsite.com/images/Filemaker-Website-logo.png" />
        <p>The contents of your message as submitted are below in case you want to keep a copy for your records.</p>
        <div class="msg-body" style="background-color: #d3d3d3; border: 1px solid #444; border-radius: 3px; padding: 10px;margin: 10px 0;">
            <div><strong>Message:</strong></div>
            <p>{{ Input::get('body') }}</p>
        </div>
		<div>Feel free to visit again soon and often to build your very own FileMakerWebsite!</div>
	</body>
</html>