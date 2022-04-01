/*Escreva um programa que imprima a soma de todos os números de 1 até 100. Ou seja, ele calculará o resultado de 1+2+3+4+...+100.*/

#include <stdio.h>
#include <stdlib.h>

int main() {
  int n = 0;
  int soma = 0;
  while(n <= 100) {
    n++;
    soma += n;
  }
  printf("A soma de todos os números de 1 até 100 é igual a: %d\n", soma);
  return 0;
}
