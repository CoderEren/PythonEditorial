import smtplib, ssl
from email.mime.text import MIMEText
from email.mime.multipart import MIMEMultipart

sender_email = "YOUR_EMAIL"
receiver_email = "RECEIVER_EMAIL"
sending_emails = ['RECEIVER_EMAIL', 'RECEIVER_EMAIL', 'RECEIVER_EMAIL']
password = input("Type your password and press enter:")

message = MIMEMultipart("alternative")

#Change The Subject For Each Email You Send
message["Subject"] = "multipart test"

message["From"] = sender_email
message["To"] = receiver_email


# Create the plain-text and HTML version of your message
text = """\
Thanks for reading Python Editorial!
To have the best reading experience of this week's issue, you need to view it on the web.
Simply go to:
issue1.html

To access all the issues of Python Editorial, go to:
member.php"""
html = """\
<html>
  <body>
    <html>
	<head>
		<title>Python Editorial - Python News, Articles & Projects Newsletter</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	</head>
	<body style="background-color:#ffffff;">
	
		<div style="">
			<div style="max-width:700px;margin:auto;background-color:#eeeeee;">
				<div class="w3-container">
					<div style="text-align:center;">
						<img src="python-editorial-logo.png" alt="Python Editorial Logo" style="max-width:70%;">
					</div>
					<h1 style="text-align:center;">Issue 1</h1>
					
					<h3><b>📰 News</b></h3>
					<ul>
						<li>
							<p><a style="color:#4B8BBE;" href="https://www.infoworld.com/article/3365221/python-2-end-of-life-how-to-survive-the-end-of-python-2.html" target="_blank" rel="nofollow">How to survive the end of Python 2?</a> - Python 2 is no longer supported by the Python Software Foundation. Here’s what you can do if you’re stuck with Python 2 in what is fast becoming a Python 3 world.</p>
							<p style="color:#4e4e4e;">By InfoWorld</p>
						</li>
						<li>
							<p><a style="color:#4B8BBE;" href="https://www.infoworld.com/article/3250299/what-is-cython-python-at-the-speed-of-c.html" target="_blank" rel="nofollow">What is Cython? Python at the speed of C</a> - A superset of Python that compiles to C, Cython combines the ease of Python and the speed of native code.</p>
							<p style="color:#4e4e4e;">By InfoWorld</p>
						</li>
						<li>
							<p><a style="color:#4B8BBE;" href="https://www.infoworld.com/article/3365221/python-2-end-of-life-how-to-survive-the-end-of-python-2.html" target="_blank" rel="nofollow">How to survive the end of Python 2?</a> - Python 2 is no longer supported by the Python Software Foundation. Here’s what you can do if you’re stuck with Python 2 in what is fast becoming a Python 3 world.</p>
							<p style="color:#4e4e4e;">By InfoWorld</p>
						</li>
					</ul>
					
					<h3><b>📃 Articles</b></h3>
					<ul>
						<li>
							<p><a style="color:#4B8BBE;" href="https://medium.com/tech-explained/top-15-python-packages-you-must-try-c6a877ed3cd0" target="_blank" rel="nofollow">Top 15 Python Packages You Must Try</a> - A handpicked list of the most useful and surprising Python packages from PyPI.</p>
							<p style="color:#4e4e4e;">By Erik-Jan van Baaren on Medium</p>
						</li>
						<li>
							<p><a style="color:#4B8BBE;" href="https://www.infoworld.com/article/3365221/python-2-end-of-life-how-to-survive-the-end-of-python-2.html" target="_blank" rel="nofollow">How to survive the end of Python 2?</a> - Python 2 is no longer supported by the Python Software Foundation. Here’s what you can do if you’re stuck with Python 2 in what is fast becoming a Python 3 world.</p>
							<p style="color:#4e4e4e;">By InfoWorld</p>
						</li>
						<li>
							<p><a style="color:#4B8BBE;" href="https://www.infoworld.com/article/3365221/python-2-end-of-life-how-to-survive-the-end-of-python-2.html" target="_blank" rel="nofollow">How to survive the end of Python 2?</a> - Python 2 is no longer supported by the Python Software Foundation. Here’s what you can do if you’re stuck with Python 2 in what is fast becoming a Python 3 world.</p>
							<p style="color:#4e4e4e;">By InfoWorld</p>
						</li>
					</ul>
					
					<h3><b>💻 Projects</b></h3>
					<ul>
						<li>
							<p><a style="color:#4B8BBE;" href="https://www.infoworld.com/article/3365221/python-2-end-of-life-how-to-survive-the-end-of-python-2.html" target="_blank" rel="nofollow">How to survive the end of Python 2?</a> - Python 2 is no longer supported by the Python Software Foundation. Here’s what you can do if you’re stuck with Python 2 in what is fast becoming a Python 3 world.</p>
							<p style="color:#4e4e4e;">By InfoWorld</p>
						</li>
						<li>
							<p><a style="color:#4B8BBE;" href="https://www.infoworld.com/article/3365221/python-2-end-of-life-how-to-survive-the-end-of-python-2.html" target="_blank" rel="nofollow">How to survive the end of Python 2?</a> - Python 2 is no longer supported by the Python Software Foundation. Here’s what you can do if you’re stuck with Python 2 in what is fast becoming a Python 3 world.</p>
							<p style="color:#4e4e4e;">By InfoWorld</p>
						</li>
						<li>
							<p><a style="color:#4B8BBE;" href="https://www.infoworld.com/article/3365221/python-2-end-of-life-how-to-survive-the-end-of-python-2.html" target="_blank" rel="nofollow">How to survive the end of Python 2?</a> - Python 2 is no longer supported by the Python Software Foundation. Here’s what you can do if you’re stuck with Python 2 in what is fast becoming a Python 3 world.</p>
							<p style="color:#4e4e4e;">By InfoWorld</p>
						</li>
					</ul>
					
					<div style="text-align:center;">
						<p><a href="issue1.html">Read On The Web</a><br><br><a href="member.php">Access All The Issues</a><br><br><a href="unsubscribe.html">Unsubscribe</a></p>
					</div>
					
				</div>
			</div>
		</div>
	
	</body>
</html>
  </body>
</html>
"""

# Turn these into plain/html MIMEText objects
part1 = MIMEText(text, "plain")
part2 = MIMEText(html, "html")

# Add HTML/plain-text parts to MIMEMultipart message
# The email client will try to render the last part first
message.attach(part1)
message.attach(part2)

# Create secure connection with server and send email
context = ssl.create_default_context()
with smtplib.SMTP_SSL("smtp.gmail.com", 465, context=context) as server:
    server.login(sender_email, password)
    for email in sending_emails:
        server.sendmail(
            sender_email, email, message.as_string()
        )
