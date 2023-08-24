import tkinter as tk

def login():
    username = username_entry.get()
    password = password_entry.get()
    
    # Here, you can add your authentication logic.
    # For simplicity, we'll just check if the username and password are not empty.
    if username and password:
        result_label.config(text="Login successful")
    else:
        result_label.config(text="Login failed")

# Create the main window
root = tk.Tk()
root.title("Login Page")

# Create and place widgets in the window
username_label = tk.Label(root, text="Username:")
username_label.pack()
username_entry = tk.Entry(root)
username_entry.pack()

password_label = tk.Label(root, text="Password:")
password_label.pack()
password_entry = tk.Entry(root, show="*")  # Use 'show' to hide password characters
password_entry.pack()

login_button = tk.Button(root, text="Login", command=login)
login_button.pack()

result_label = tk.Label(root, text="")
result_label.pack()

# Start the main loop
root.mainloop()
