
drop table if exists task;

create table task(
	taskId binary(20) not null,
	taskDescription varchar(256),
	taskDueDate datetime,
	taskPriority varchar(64) not null,
	taskStartDate datetime,
	taskStatus varchar(64) not null,
	taskTitle varchar(255)not null,
	primary key(taskId)
);
