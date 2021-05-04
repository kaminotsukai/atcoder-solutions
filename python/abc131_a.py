s = input()

ans = True
for i in range(0, len(s) - 1):
    if s[i] == s[i + 1]:
        ans = False

if ans:
    print('Good')
else:
    print('Bad')
