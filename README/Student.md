# Default properties

When created, you need to give the following attributes:
+ School;
+ Grade;
+ Teacher;
+ Name.

Any student can do the following actions:
+ Answer a test on your list and send automatically to your teacher;
+ See your own result on the test.
> [!NOTE]
> A student can only see your own nresult.

## Documentation
### To instance a new student
```$student = new Student(School $school, Grade $grade, Teacher $teacher, string $name);```

### To Answer a test
``` $student->answer_test(Test $test, string $answer); ```

### To see the result of a test
``` $student->see_result(Test $test); ```  

