from flask import Flask
app = Flask(__name__)

@app.route('/')
def run_sms():
    import os
    os.system("php injury_sms.php")
    return "Injury alert message has been sent to parents."
