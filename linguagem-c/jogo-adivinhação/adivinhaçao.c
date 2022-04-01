#include <stdio.h>
#include <stdlib.h>

#define NUMERO_SECRETO 7

int main() {
  int chute;
  int tentativa = 0;

  printf("=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-\n");
  printf("BEM VINDO AO JOGO DA ADIVINHAÇÃO\n");
  printf("=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-\n");
  printf("O computador pensou em um número de 0 a 20, tente adivinhar qual número foi. \n");

  while( chute != NUMERO_SECRETO){
    printf("Tentativa %d. Que número você escolhe? ", tentativa + 1);
    scanf("%d%*c", &chute);
    tentativa++;
    if (chute == NUMERO_SECRETO && tentativa > 10) {
      printf("Você acertou na tentativa %d, hoje não é seu dia de sorte.\n", tentativa);
      break;
    }
    else if (chute == NUMERO_SECRETO) {
      printf("Parabens!! Você acertou na tentativa %d.\n", tentativa);
      break;
    }
    else if (chute < 0) {
      printf("Você não pode escolher números negativos\n");
      tentativa--;
    }   
    else if (chute < NUMERO_SECRETO) {
      printf("Você errou.\n");
      printf("O número escolhido foi menor que o número secreto\n");
    }
    else if (chute > NUMERO_SECRETO) {
      printf("Você errou.\n");
      printf("O número escolhido foi maior que o número secreto\n");
    }
  }
  return 0;
}
