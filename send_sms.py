# Download the helper library from https://www.twilio.com/docs/python/install
from twilio.rest import Client


# Your Account Sid and Auth Token from twilio.com/console
# DANGER! This is insecure. See http://twil.io/secure
account_sid = 'ACba3bd47c*****93ea7d9dc7a25****'
auth_token = '8e78e64aa7ef5******23af85f3b3**'
client = Client(account_sid, auth_token)

message = client.messages \
                .create(
                     body="Join Earth's mightiest heroes. Like Kevin Bacon.",
                     from_='+14109210651',
                     to='+4434730798'
                 )

print(message.sid)
