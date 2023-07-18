2
import time
import random
Ex=('Desafio jo ken po')
print('{:=^40}'.format(Ex))
itens = ('Tesoura','Papel','Pedra')
print('[0] Tesoura\n[1] Papel\n[2] Pedra')
escolha = int(input('Digite o sua escolha:'))
sort = random.randint(0,2)

print('Jo')
time.sleep(1)
print('ken')
time.sleep(1)
print('PO')

print('O computador escolheu {}'.format(itens[sort]))
print('Você escolheu {}'.format(itens[escolha]))

if escolha == sort:
    print('Deu empate')

elif escolha == 0 and sort == 1:
    print('Parabens você ganhou.')
elif escolha == 0 and sort == 2:
    print('Você Perdeu')

elif escolha == 1 and sort == 0:
    print('Você Perdeu')
elif escolha == 1 and sort == 2:
    print('Parabens você ganhou')

elif escolha == 2 and sort == 1:
    print('Você Perdeu')
elif escolha == 2 and sort == 0:
    print('Parabens você ganhou')

else:
    print('escolha invalida')