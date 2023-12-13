<body>
    <section class="container mt-5">
        <form class="col-4 m-auto g-3" action="./app/table.php">
            <div>
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Mark" name="name" required>
            </div>
            <div>
                <label for="sourname" class="form-label">Sourname</label>
                <input type="text" class="form-control" id="sourname" placeholder="Zuckerberg" name="sourname" required>
            </div>
            <div>
                <label for="department" class="form-label">Department</label>
                <select class="form-select" id="department" name="department" required>
                    <option selected value="backend">Backend</option>
                    <option selected value="frontend">Frontend</option>
                    <option selected value="designer">Designer</option>
                    <option selected disabled value="Designer">Choose...</option>
                </select>
            <div>
                <label for="office" class="form-label">Office</label>
                <input type="text" class="form-control" id="office" placeholder="office" name="office" required>
            </div>
            <div class="col-12 mt-4">
                <button class="btn w-50 btn-primary" type="submit" name="send">Send</button>
            </div>
        </form>
    </section>
</body>
</html>
