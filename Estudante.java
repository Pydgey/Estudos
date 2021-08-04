package classes;

public class Estudante {
	private String nome;
	private int idade;
	private int[] notas;
	private boolean aprovacao;

	public void imprimeEstudante() {
		System.out.println("Nome: "+this.nome);
		System.out.println("Idade: "+this.idade);
		System.out.println("Notas: ");
		
		//    validação   //
		if (notas != null)
				
			for (int nota : notas) {
				System.out.print(nota+" ");
			}
		else {
		System.out.println("Erro nas notas");
		}
	}
		
	public void tirarMedia() {
		
		//    validação    //
		if(notas == null) {
			System.out.println("Esse aluno não possui notas!");
			return;
		}
		
		double media = 0;
		for(double nota : notas) {
			media += nota;
		}
		media = media / notas.length;
		if(media > 6) {
			System.out.println("Média: "+media);
			System.out.println("Aprovado");
			aprovacao = true;
			return;
		}
		System.out.println("Reprovado");
		aprovacao = false;
	}
	
	public void setNome(String nome) {
		this.nome = nome;
	}
	public void setIdade(int idade) {
		// validação 
		if(idade < 0) {
			System.out.println("Idade não pode ser negativa");
			return;
		}
		this.idade = idade;
	}
	public void setNotas(int[] notas) {
		this.notas = notas;
	}

	public String getNome() {
		return this.nome;
	}
	public int getIdade() {
		return this.idade;
	}
	public int[] getNotas() {
		return this.notas;
	}
	public boolean getAprovacao() {
		return this.aprovacao;
	}

}

