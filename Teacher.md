# Default properties

Every teacher has the following properties:
+ A name;
+ The subject that he/she teaches;
+ The School he/she works on;
+ The grade he/she is responsible;


And every teacher can:
+ Make model tests;
+ Deliver test copies to your students so they can aswer them;
+ Receive answered tests from your students and keep it;
+ Revise answered tests*;
+ Send the asnwered tests to the grade's database.

> [!IMPORTANT]
> The teacher can only revise test that he have made.

> [!WARNING]
> The teacher can only revise the tests
>if all of the students from the grade have delivered
> your test.

## Documentation
### To instance a new teacher:
``` $newTeacher = new Teacher(string $name, string $subject, Grade $grade, School $school); ```

### To make a new model test:
``` $teacher->make_model_test(Grade $grade, string $title); ```

### To deliver a test to your own grade:

``` $teacher->deliver_test(); ```

### To revise the tests

``` $teacher->revise_tests(); ```
