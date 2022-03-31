#include <stdio.h>
#include <stdlib.h>

#define ATTEMPT 5 //Tentativas

int main() {
  /*Cabeçalho do jogo*/
  printf("==================================\n");
  printf("BEM VINDO AO JOGO DA ADIVINHAÇÃO!!\n");
  printf("==================================\n");

  int secretNumber = 8; //Número secreto
  int kick; //Chutes
  
  printf("Entre 0 e 10, adivinhe qual é o número secreto !!\n");
  for (int i = 1; i <= ATTEMPT; i++) {
    printf("Tentativa %d de %d Que número você escolhe? ", i, ATTEMPT);
    scanf("%d%*c", &kick);
      if (secretNumber == kick) {
        printf("Parabéns!! Você acertou :D \n");
        printf("Fim do jogo. \n");
        break;
      } else {
          if (kick < secretNumber) {
            printf("Ah que pena, você errou.. \n");
            printf("Seu chute foi menor que o número secreto.. \n");
          } else {
            printf("Ah que pena, você errou.. \n");
            printf("Seu chute foi maior que o número secreto.. \n");
          }
          if (i < 3){
            printf("Mas não desanime, jogue novamente. \n");
          } else {
            printf("Suas tentativas acabaram =/ \n");
          }
        }
  }
  return 0;
}
