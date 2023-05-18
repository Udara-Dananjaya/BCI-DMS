CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(15) NOT NULL,
  `nic` int(15) NOT NULL,
  `id_issued_date` date NOT NULL,
  `id_expire_date` date NOT NULL,
  `year_in_school` int(5) NOT NULL,
  `graduation_year` int(5) NOT NULL,
  `token` varchar(64) NOT NULL,
  `img` varchar(100) NOT NULL,
  `deg_id` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `student_token` (
  `st_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `token` varchar(64) NOT NULL,
  `issued_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone_number` int(15) NOT NULL,
  `office_number` int(15) NOT NULL,
  `education` varchar(200) NOT NULL,
  `experience` varchar(200) NOT NULL,
  `img` varchar(100) NOT NULL,
  `dep_id` int(10) NOT NULL,
  `usertype` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `staff_token` (
  `st_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `token` varchar(64) NOT NULL,
  `issued_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `department` (
  `dep_id` int(10) NOT NULL,
  `dep_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `degree` (
  `deg_id` int(25) NOT NULL,
  `dep_id` int(10) NOT NULL,
  `cord_id` varchar(50) NOT NULL,
  `deg_name` varchar(50) NOT NULL,
  `duration` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `batch` (
  `batch_id` int(11) NOT NULL,
  `deg_id` int(25) NOT NULL,
  `batch_year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `semester` (
  `sem_id` int(11) NOT NULL,
  `batch_id` int(11) NOT NULL,
  `sem_name` varchar(50) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `sem_id` int(11) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `course_description` varchar(100) NOT NULL,
  `course_credits` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `exam_result` (
  `result_id` int(25) NOT NULL,
    `student_id` int(11) NOT NULL,
    `course_id` int(11) NOT NULL,
  `value` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `degree_status` (
  `status_id` int(25) NOT NULL,
    `student_id` int(11) NOT NULL,
  `gpa` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `award` (
  `award_id` int(11) NOT NULL,
  `award_type` int(11) NOT NULL,
  `award_name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `student_award` (
  `award_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;