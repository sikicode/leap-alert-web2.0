from flask import Flask
app = Flask(__name__)

@app.route('/')
def run_sms():
    import os
    os.system("php hunger_sms.php")
    return "Hunger alert message has been sent to parents."
