#include <stdio.h>
#include <stdlib.h>
#include <time.h>
#include <windows.h>

int main() {
  UINT CPAGE_UTF8 = 65001;
  SetConsoleOutputCP(CPAGE_UTF8);

  float pontos = 1000, pontosPerdidos = 0;
  int segundos = time(0);
  srand(segundos);

  int numeroSecreto = rand() %50, numTentativas, opcao, chute;
  printf("       _______                                                \n");
  printf("     _/       \\_                                             \n");
  printf("    / |       | \\                                            \n");
  printf("   /  |__   __|  \\                                           \n");
  printf("  |__/((o| |o))\\__|                                          \n");  
  printf("  |      | |      |                                           \n");
  printf("  |\\     |_|     /|                                          \n");
  printf("  |\\           /  |        Olá humano!!                      \n");
  printf("   \\| /  ___  \\ |/     --  Bem vindo ao jogo da adivinhação.\n");
  printf("    \\ | / _ \\ | /                                           \n");
  printf("     \\_________/                                             \n");
  printf("      _|_____|_                                               \n");
  printf(" ____|_________|____                                          \n");
  printf("/                   \\                                        \n");
  printf("\n\n");
  printf("Pensei em um número inteiro secreto entre 0 e 50, tente adivinhar qual é esse número\n\n");
  printf("Em qual nível você quer jogar:\n");
  printf("(1) - Fácil (2) - Médio (3) - Difícil\n");
  printf("Opção: ");
  scanf("%d%*c", &opcao);
  
  switch (opcao) {
  case 1:
    printf("Você tem 15 tentativas para acertar o número\n");
    numTentativas = 15;
    for (numTentativas ; numTentativas >= 0; numTentativas--) {
      printf("Tentativa %d. Qual seu chute? ", numTentativas);
      scanf("%d%*c", &chute);
      if (chute == numeroSecreto) {
        printf("É seu dia de sorte humano\nPARABÉNS\nVocê acertou meu número secreto.\n");
        printf("Pontuação: %.1f", pontos);
        break;
      }
      else {
        printf("Você errou!\n");
        if (chute > numeroSecreto) {
          printf("Seu chute é maior que meu número secreto.\n");
          pontosPerdidos = (abs(numeroSecreto - chute) / (float)2);
          pontos -= pontosPerdidos;
        }
        else if (chute < numeroSecreto) {
          printf("Seu chute é menor que meu número secreto.\n");
          pontosPerdidos = (abs(numeroSecreto - chute) / (float)2);
          pontos -= pontosPerdidos;
        }
      }
      if (numTentativas == 0) {
        printf("Tentativas esgotadas\nGAME OVER!!\n");
      } 
    }
    break;
  case 2:
    printf("Você tem 10 tentativas para acertar o número\n");
    numTentativas = 10;
    for (numTentativas ; numTentativas >= 0; numTentativas--) {
      printf("Tentativa %d. Qual seu chute? ", numTentativas);
      scanf("%d%*c", &chute);
      if (chute == numeroSecreto) {
        printf("É seu dia de sorte humano\nPARABÉNS\nVocê acertou meu número secreto.\n");
        printf("Pontuação: %.1f", pontos);
        break;
      }
      else {
        printf("Você errou!\n");
        if (chute > numeroSecreto) {
          printf("Seu chute é maior que meu número secreto.\n");
          pontosPerdidos = (abs(numeroSecreto - chute) / (float)2);
          pontos -= pontosPerdidos;
        }
        else if (chute < numeroSecreto) {
          printf("Seu chute é menor que meu número secreto.\n");
          pontosPerdidos = (abs(numeroSecreto - chute) / (float)2);
          pontos -= pontosPerdidos;
        }
      }
      if (numTentativas == 0) {
        printf("Tentativas esgotadas\nGAME OVER!!\n");
      } 
    }
    break;
  case 3:
    printf("Você tem 6 tentativas para acertar o número.\n");
    numTentativas = 6;
    for (numTentativas ; numTentativas > 0; numTentativas--) {
      printf("Tentativa %d. Qual seu chute? ", numTentativas);
      scanf("%d%*c", &chute);
      if (chute == numeroSecreto) {
        printf("É seu dia de sorte humano\nPARABÉNS\nVocê acertou meu número secreto.\n");
        printf("Pontuação: %.1f", pontos);
        break;
      }
      else {
        printf("Você errou!\n");
        if (chute > numeroSecreto) {
          printf("Seu chute é maior que meu número secreto.\n");
          pontosPerdidos = (abs(numeroSecreto - chute) / (float)2);
          pontos -= pontosPerdidos;
        }
        else if (chute < numeroSecreto) {
          printf("Seu chute é menor que meu número secreto.\n");
          pontosPerdidos = (abs(numeroSecreto - chute) / (float)2);
          pontos -= pontosPerdidos;
        }
      }
      if (numTentativas == 1) {
        printf("Tentativas esgotadas\nGAME OVER!!\n");
      } 
    }
    break;
  }
  return 0;
}