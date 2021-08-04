package teste;

import classes.Estudante;

import java.util.Scanner; 

public class Javacore {
	public static void main(String[] args) {
		Estudante nEstudante = new Estudante();
		
		Scanner nNome = new Scanner(System.in);
		Scanner nIdade = new Scanner(System.in);
		//Scanner nNotas = new Scanner(System.in);
		
		System.out.println("Digite o nome:");
		nEstudante.setNome(nNome.nextLine());
		
		System.out.println("Digite a Idade:");
		nEstudante.setIdade(nIdade.nextInt());
		//nEstudante.setNotas(nNotas.nextInt());
		
		nEstudante.setNotas(new int[] {8,7,9});
		
		nEstudante.imprimeEstudante();
		nEstudante.tirarMedia();
		
		System.out.println("---------------------");
		
		for (int i = 0; i < nEstudante.getNotas().length; i++) {
			System.out.print(nEstudante.getNotas()[i]+" ");
		}
		if(nEstudante.getAprovacao() == true) {
				System.out.print("validação aprovada");
		}
	}
}
