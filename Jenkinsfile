pipeline {
    agent any
    stages {
        stage("first") {
            steps {
                script {
                    def foo = "foo" 
                    sh "echo ${foo}"
                }
            }
        }
    }
}

