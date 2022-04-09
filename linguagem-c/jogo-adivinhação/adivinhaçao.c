#include <stdio.h>
#include <stdlib.h>
#include <math.h>
#include <windows.h>
#include <time.h>

int main() {
  UINT CPAGE_UTF8 = 65001;
  SetConsoleOutputCP(CPAGE_UTF8);

  
  int tentativa = 0, chute, numeroSecreto;
  float pontos = 1000.0;

  printf("=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-\n");
  printf("BEM VINDO AO JOGO DA ADIVINHAÇÃO\n");
  printf("=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-\n");
  printf("O computador pensou em um número de 0 a 20, tente adivinhar qual número foi. \n");

  /*Número randomico*/
  int segundos = time(0);
  srand(segundos);
  numeroSecreto = rand() % 20;

  while( chute != numeroSecreto){
    printf("Tentativa %d. Que número você escolhe? ", tentativa + 1);
    scanf("%d%*c", &chute);
    tentativa++;
    if (chute == numeroSecreto && tentativa > 10) {
      pontos = pontos - ((chute - numeroSecreto) / (float)2);
      printf("Você acertou na tentativa %d, hoje não é seu dia de sorte.\n", tentativa);
      printf("Total de pontos %.1f", pontos);
      break;
    }
    else if (chute == numeroSecreto) {
      pontos = pontos - ((chute - numeroSecreto) / (float)2);
      printf("Parabens!! Você acertou na tentativa %d.\n", tentativa);
      printf("Total de pontos %.1f", pontos);
      break;
    }
    else if (chute < 0) {
      printf("Você não pode escolher números negativos\n");
      tentativa--;
    }   
    else if (chute < numeroSecreto) {
      pontos = pontos - (abs(chute - numeroSecreto) / (float)2);
      printf("Você errou.\n");
      printf("O número escolhido foi menor que o número secreto\n");
    }
    else if (chute > numeroSecreto) {
      pontos = pontos - ((chute - numeroSecreto) / (float)2);
      printf("Você errou.\n");
      printf("O número escolhido foi maior que o número secreto\n");
    }
  }
  return 0;
}
