create or replace view disciplinasDoAluno as
 select aluno.nome as aluno_nome, aluno.id as aluno_id, disciplina.nome as disciplina_nome,
 disciplina.id as disciplina_id, disciplina.codigo as disciplina_cod
 from aluno, disciplina, disciplinas_cursadas
 where aluno.id = disciplinas_cursadas.aluno_id 
 and disciplina.id = disciplinas_cursadas.disciplina_id;