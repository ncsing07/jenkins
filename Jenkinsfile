pipeline {
    node {
        stage('clone') {
            // enabled by project type "Pipeline script from SCM"
            scmvars = checkout(scm)
            echo "git details: ${scmvars}"
        }

        post {
            success {
                githubNotify description: 'This is a shorted example',  status: 'SUCCESS'
            }

            failure {
                githubNotify description: 'This is a failure notification',  status: 'FAILURE'
            }
        }
    }
}

