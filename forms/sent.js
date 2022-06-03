// Set your API Key here
$sendGridApiKey = 'SG...........P258'

$SendGridEmail = {
	// Use your verified sender address.
	From = 'mailer@lzex.ml'
	// Specify the email recipient. Any valid email address should work.
	To = 'june.castillote@gmail.com'
	// Update this with the email subject you want to use.
	Subject = 'This is a test message from Azure via SendGrid'
	// Update this with the email body or message that you want to send.
	Body = 'This is a test message from Azure via SendGrid'
	
	// DO NO CHANGE ANYTHING BELOW THIS LINE
	SmtpServer = 'smtp.sendgrid.net'
	Port = 587
	UseSSL = $true
	Credential = New-Object PSCredential 'apikey', (ConvertTo-SecureString $sendGridApiKey -AsPlainText -Force)	
}

// Send the email
Send-MailMessage @SendGridEmail