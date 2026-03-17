from flask import Flask, render_template, request

app = Flask(_name_)

@app.route('/')
def home():
    return render_template('index.html')

@app.route('/submit', methods=['POST'])
def submit():
    name = request.form['name']
    phone = request.form['phone']
    city = request.form['city']
    email = request.form['email']
    address = request.form['address']

    print("Name:", name)
    print("Phone:", phone)
    print("City:", city)
    print("Email:", email)
    print("Address:", address)

    return "Form Submitted Successfully!"

if _name_ == '_main_':
    app.run(debug=True)