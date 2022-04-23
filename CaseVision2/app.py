from flask import Flask, render_template, request

app = Flask(__name__, static_url_path='/static/')

@app.route('/index.php')
def index():
    return render_template('index.php')

@app.route('/uploadpg.php')
def upload():
        return render_template('uploadpg.php')

@app.route('/results.php', methods = ['POST'])
def results():
    if request.method == 'POST':
        img = request.files['inpFile']
    return render_template('results.php')