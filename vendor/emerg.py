from flask import Flask
app = Flask(__name__)

@app.route('/')
def run_sms():
    import os
    os.system("php emerg_sms.php")
    return "Emergency alert message has been sent to parents."
