<div class="card mb-3">
    <img class="card-img-top" src="https://i1.pngguru.com/preview/542/86/468/school-drawing-student-study-skills-animation-education-school-cartoon-learning-png-clipart.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">List of students</h5>
      <p class="card-text">You can find here all the informations about student in the system</p>
      
      <table class="table">
        <thead class="thead-light">
              <tr>
                <th scope="col">CNE</th>
                <th scope="col">First Name</th>
                <th scope="col">Second Name</th>
                <th scope="col">Age</th>
                <th scope="col">Speciality</th>
                <th scope="col">operations</th>
              </tr>
        </thead>
            <tbody>
                @foreach ($students as $student)
                <tr>
                    <td>{{ $student->cne }}</td>
                    <td>{{ $student->firstName}}</td>
                    <td>{{ $student->secondName}}</td>
                    <td>{{ $student->age}}</td>
                    <td>{{ $student->speciality}}</td>
                    <td>
                        <a href="{{ url('/edit', [$student->id]) }}" class="btn btn-sm btn-warning">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
    
    
    </div>
  </div>



