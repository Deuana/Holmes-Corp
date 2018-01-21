## Quais são as tabelas e suas colunas

### disciplinas_cursadas

**Tabela:** `achieved_disciplines` (substitui disciplinas_cursadas)  
**Descrição:** Armazena as disciplinas já cursadas pelo aluno.  
**Colunas:**
* `id`
* `student_id`
* `discipline_id`

### departamento

**Tabela:** `areas` (substitui departamento)  
**Descrição:** Armazena as áreas do conhecimento da UFBA.  
**Colunas:** 
* `id`
* `name`
* `description`  

### vagas_curso

**Tabela:** `course_class_offers`  
**Descrição:** Armazena as relações entre as tabelas curso e vagas da turma.  
**Colunas:**
* `id`
* `course_id`
* `discipline_class_offer_id`  

### disciplina_curso

**Tabela:** `course_disciplines`  
**Descrição:** Armazena as relações entre as tabelas courses e disciplines, registrando também o número do semestre (1 ou 2) e natureza da disciplina (OB, OP, etc).  
**Colunas:**
* `id`
* `semester`
* `nature`
* `course_id`
* `discipline_id`
* `created_at`
* `updated_at`

### curso

**Tabela:** `courses`  
**Descrição:** Armazena os cursos oferecidos pela UFBA, relacionando-os com as áreas do conhecimento.  
**Colunas:**
* `id`
* `name`
* `code`
* `created_at`
* `updated_at`
* `curriculum`
* `area_id`

### turma

**Tabela:** `discipline_classes`  
**Descrição:** Armazena as turmas de uma disciplina.   
**Colunas:**
* `id`
* `discipline_id`
* `class_number`

### vagas_turma

**Tabela:** `discipline_class_offers`  
**Descrição:** Armazena as vagas oferecidas para uma turma de uma disciplina.  
**Colunas:**
* `id`
* `discipline_class_id`
* `vacancies`

### disciplina

**Tabela:** `disciplines` (substitui disciplina)  
**Descrição:** Armazena as disciplinas oferecidas pela UFBA.  
**Colunas:**
* `id`
* `code`
* `name`
* `created_at`
* `updated_at`
* `curriculum`
* `load`

### requisito

**Tabela:** `pre_requisites`  
**Descrição:** Armazena as relações de pré-requisito entre as disciplinas oferecidas pela UFBA.  
**Colunas:**
* `id`
* `pre_discipline_id`
* `post_discipline_id`
* `created_at`
* `updated_at`

### professor_horario

**Tabela:** `professor_schedules`  
**Descrição:** Armazena as relações entre as tabelas horário e professor.  
**Colunas:**
* `id`
* `schedule_id`
* `professor_id`

### professor

**Tabela:** `professors`  
**Descrição:** Armazena os professores que lecionam na UFBA.  
**Colunas:**
* `id`
* `name`

### horario

**Tabela:** `schedules`  
**Descrição:** Armazena os horários da turma de uma disciplina.  
**Colunas:**
* `id`
* `day`
* `start_hour`
* `start_minute`
* `discipline_class_id`
* `end_hour`
* `end_minute`
* `first_class_number`
* `class_count`

### aluno

**Tabela:** `students`  
**Descrição:** Armazena as informações do aluno.  
**Colunas:**
* `id`
* `name`
* `password`
* `email`
* `enrollment`
* `course_id`

