<div class="adminx-sidebar expand-hover push" >
    <ul class="sidebar-nav">
      <li class="sidebar-nav-item">
        <a href="{{ route('admin.index') }}" class="sidebar-nav-link active">
          <span class="sidebar-nav-icon">
            <i data-feather="home"></i>
          </span>
          <span class="sidebar-nav-name">
           ITI
          </span>
          <span class="sidebar-nav-end">

          </span>
        </a>
      </li>


      <li class="sidebar-nav-item">
        <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#navTables" aria-expanded="false" aria-controls="navTables">
          <span class="sidebar-nav-icon">
            <i data-feather="align-justify"></i>
          </span>
          <span class="sidebar-nav-name">
            Tables
          </span>
          <span class="sidebar-nav-end">
            <i data-feather="chevron-right" class="nav-collapse-icon"></i>
          </span>
        </a>

        <ul class="sidebar-sub-nav collapse" id="navTables">


          <li class="sidebar-nav-item">
                <a href="{{ route('students.index') }}" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    ST
                  </span>
                  <span class="sidebar-nav-name">
                    All Students
                  </span>
                </a>
              </li>
              <li class="sidebar-nav-item">
                <a href="{{ route('topics.index') }}" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    TO
                  </span>
                  <span class="sidebar-nav-name">
                    All Topics
                  </span>
                </a>
              </li>
              <li class="sidebar-nav-item">
                <a href="{{ route('courses.index') }}" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    CO
                  </span>
                  <span class="sidebar-nav-name">
                    All Cources
                  </span>
                </a>
              </li>
              <li class="sidebar-nav-item">
                <a href="{{ route('departments.index') }}" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    DE
                  </span>
                  <span class="sidebar-nav-name">
                    All Departments
                  </span>
                </a>
              </li>
              <li class="sidebar-nav-item">
                <a href="{{ route('instructors.index') }}" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    IN
                  </span>
                  <span class="sidebar-nav-name">
                    All Instructors
                  </span>
                </a>
              </li>
        </ul>
      </li>

      <li class="sidebar-nav-item">
        <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#navForms" aria-expanded="false" aria-controls="navForms">
          <span class="sidebar-nav-icon">
            <i data-feather="edit"></i>
          </span>
          <span class="sidebar-nav-name">
            ADD
          </span>
          <span class="sidebar-nav-end">
            <i data-feather="chevron-right" class="nav-collapse-icon"></i>
          </span>
        </a>

        <ul class="sidebar-sub-nav collapse" id="navForms">
            <li class="sidebar-nav-item">
              <a href="{{ route('students.create') }}" class="sidebar-nav-link">
                <span class="sidebar-nav-abbr">
                  ST
                </span>
                <span class="sidebar-nav-name">
                 ADD Student
                </span>
              </a>

            </li>

            <li class="sidebar-nav-item">
              <a href="{{ route('topics.create') }}" class="sidebar-nav-link">
                <span class="sidebar-nav-abbr">
                  TO
                </span>
                <span class="sidebar-nav-name">
                 ADD Tobic
                </span>
              </a>
            </li>
            <li class="sidebar-nav-item">
              <a href="{{ route('courses.create') }}" class="sidebar-nav-link">
                <span class="sidebar-nav-abbr">
                  CO
                </span>
                <span class="sidebar-nav-name">
                 ADD Course
                </span>
              </a>
            </li>
            </li>

            <li class="sidebar-nav-item">
              <a href="{{ route('departments.create') }}" class="sidebar-nav-link">
                <span class="sidebar-nav-abbr">
                  DE
                </span>
                <span class="sidebar-nav-name">
                 ADD Department
                </span>
              </a>
            </li>
            <li class="sidebar-nav-item">
                <a href="{{ route('instructors.create') }}" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    IN
                  </span>
                  <span class="sidebar-nav-name">
                    ADD Instructor
                  </span>
                </a>
              </li>
            </ul>
          </li>
          <li class="sidebar-nav-item">
            <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#navArchive" aria-expanded="false" aria-controls="navTables">
                <span class="sidebar-nav-icon">
                  <i data-feather="align-justify"></i>
                </span>
                <span class="sidebar-nav-name">
                    Archive
                </span>
                <span class="sidebar-nav-end">
                  <i data-feather="chevron-right" class="nav-collapse-icon"></i>
                </span>
              </a>

            <ul class="sidebar-sub-nav collapse" id="navArchive">

                <li class="sidebar-nav-item">
                    <a href="{{ route('students.archive') }}" class="sidebar-nav-link">
                      <span class="sidebar-nav-abbr">
                        ST
                      </span>
                      <span class="sidebar-nav-name">
                        Students Archive
                      </span>
                    </a>
                  </li>

                  <li class="sidebar-nav-item">
                    <a href="{{ route('topics.archive') }}" class="sidebar-nav-link">
                      <span class="sidebar-nav-abbr">
                        TO
                      </span>
                      <span class="sidebar-nav-name">
                        topics Archive
                      </span>
                    </a>
                  </li>
                  <li class="sidebar-nav-item">
                    <a href="{{ route('courses.archive') }}" class="sidebar-nav-link">
                      <span class="sidebar-nav-abbr">
                        CO
                      </span>
                      <span class="sidebar-nav-name">
                        courses Archive
                      </span>
                    </a>
                  </li>
                  <li class="sidebar-nav-item">
                    <a href="{{ route('departments.archive') }}" class="sidebar-nav-link">
                      <span class="sidebar-nav-abbr">
                        DE
                      </span>
                      <span class="sidebar-nav-name">
                        departments Archive
                      </span>
                    </a>
                  </li>
                <li class="sidebar-nav-item">
                    <a href="{{ route('instructors.archive') }}" class="sidebar-nav-link">
                      <span class="sidebar-nav-abbr">
                        IN
                      </span>
                      <span class="sidebar-nav-name">
                        Instructors Archive
                      </span>
                    </a>
                  </li>







                </ul>
              </li>



            <!-- <li class="sidebar-nav-item">
              <a href="./layouts/form_advanced.html" class="sidebar-nav-link">
                <span class="sidebar-nav-abbr">
                  Ad
                </span>
                <span class="sidebar-nav-name">
                  Advanced Elements
                </span>
              </a>
            </li> -->
          </ul>
      </li>

      <li class="sidebar-nav-item">
        <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#navExtra" aria-expanded="false" aria-controls="navExtra">
          <span class="sidebar-nav-icon">
            <i data-feather="layers"></i>
          </span>
          <span class="sidebar-nav-name">
            Other Layouts
          </span>
          <span class="sidebar-nav-end">
            <i data-feather="chevron-right" class="nav-collapse-icon"></i>
          </span>
        </a>

        <ul class="sidebar-sub-nav collapse" id="navExtra">
          <li class="sidebar-nav-item">
            <a href="./layouts/login.html" class="sidebar-nav-link">
              <span class="sidebar-nav-abbr">
                Lo
              </span>
              <span class="sidebar-nav-name">
                Login
              </span>
            </a>
          </li>

          <li class="sidebar-nav-item">
            <a href="./layouts/signup.html" class="sidebar-nav-link">
              <span class="sidebar-nav-abbr">
                Si
              </span>
              <span class="sidebar-nav-name">
                Sign Up
              </span>
            </a>
          </li>

    </ul>
  </div>
