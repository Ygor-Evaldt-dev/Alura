/*Escreva um programa que peça um inteiro ao usuário, e com esse inteiro, ele imprima, linha-a-linha, a tabuada daquele número até o 10. Por exemplo, se ele escolher o número 2, o programa imprimirá: 2x1=2, 2x2=4, 2x3=6, ..., 2x10=20.*/

#include <stdio.h>
#include <stdlib.h>
#include <windows.h>

int main() {
  UINT CPAGE_UTF8 = 65001;
  SetConsoleOutputCP(CPAGE_UTF8);

  int numero, i=1;
  printf("Digite um número para ver sua tabuada completa: ");
  scanf("%d%*c", &numero);

  printf("=-=-=-=-=-=-=-=-=-=-\n");
  printf("TABUADA DO NÚMERO %d\n", numero);
  printf("=-=-=-=-=-=-=-=-=-=-\n");
  while (i <= 10){
    printf("%d x %d = %d\n", numero, i, (i*numero));
    i++;
  }
  return 0;
}