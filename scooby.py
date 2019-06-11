vowel=["a","e","i","o","u"]
user=list(raw_input("Enter your word: "))
print(user[0])
if user[0] not in vowel:
    user[0]="r"
    print("".join(user))

    
