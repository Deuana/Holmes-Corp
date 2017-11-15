create or replace view disciplinasDoAluno as
 select aluno.nome as aluno_nome, aluno.id as aluno_id, disciplina.nome as disciplina_nome,
 disciplina.id as disciplina_id, disciplina.codigo as disciplina_cod
 from aluno, disciplina, disciplinas_cursadas
 where aluno.id = disciplinas_cursadas.aluno_id 
 and disciplina.id = disciplinas_cursadas.disciplina_id;
 
create or replace view alunoView as
 select disciplina.*
 from disciplina 
 inner join disciplina_curso 
 on disciplina.id = disciplina_curso.disciplina_id
 inner join disciplinas_cursadas
 on disciplina.id = disciplinas_cursadas.disciplina_id
 inner join aluno 
 on disciplinas_cursadas.aluno_id = aluno.id 
 inner join turma
 on turma.disciplina_id = disciplina.id
 inner join professor 
 on professor.id = turma.professor_id
 ;
