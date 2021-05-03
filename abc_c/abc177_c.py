n = int(input())
Ai = list(map(int, input().split()))

S = sum(Ai)
S2 = sum(map(lambda x: x * x, Ai))

print((S * S - S2) / 2 % (10**9 + 7))