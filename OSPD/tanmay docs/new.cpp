#include <bits/stdc++.h>
usingnamespacestd;
structprocess
{
    intpid;
    intarrival_time;
    intburst_time;
    intstart_time;
    intcompletion_time;
    intturnaround_time;
    intwaiting_time;
    intresponse_time;
};
intmain()
{

    intx;
    structprocessp[100];
    floatavg_turnaround_time;
    floatavg_waiting_time;
    floatavg_response_time;
    floatcpu_utilization;
    inttotal_turnaround_time = 0;
    inttotal_waiting_time = 0;
    inttotal_response_time = 0;
    inttotal_idle_time = 0;
    floatthroughput;
    intburst_remaining[100];
    intis_completed[100];
    memset(is_completed, 0, sizeof(is_completed));

    cout << setprecision(2) << fixed;

    cout << "Enter the number of processes: ";
    cin >> x;

    for (inti = 0; i < x; i++)
    {
        cout << "Enter arrival time of process " << i + 1 << ": ";
        cin >> p[i].arrival_time;
        cout << "Enter burst time of process " << i + 1 << ": ";
        cin >> p[i].burst_time;
        p[i].pid = i + 1;
        burst_remaining[i] = p[i].burst_time;
        cout << endl;
    }

    intcurrent_time = 0;
    intcompleted = 0;
    intprev = 0;

    while (completed != x)
    {
        intidx = -1;
        intmn = 10000000;
        for (inti = 0; i < x; i++)
        {
            if (p[i].arrival_time <= current_time && is_completed[i] == 0)
            {
                if (burst_remaining[i] < mn)
                {
                    mn = burst_remaining[i];
                    idx = i;
                }
                if (burst_remaining[i] == mn)
                {
                    if (p[i].arrival_time < p[idx].arrival_time)
                    {
                        mn = burst_remaining[i];
                        idx = i;
                    }
                }
            }
        }

        if (idx != -1)
        {
            if (burst_remaining[idx] == p[idx].burst_time)
            {
                p[idx].start_time = current_time;
                total_idle_time += p[idx].start_time - prev;
            }
            burst_remaining[idx] -= 1;
            current_time++;
            prev = current_time;

            if (burst_remaining[idx] == 0)
            {
                p[idx].completion_time = current_time;
                p[idx].turnaround_time = p[idx].completion_time - p[idx].arrival_time;
                p[idx].waiting_time = p[idx].turnaround_time - p[idx].burst_time;
                p[idx].response_time = p[idx].start_time - p[idx].arrival_time;

                total_turnaround_time += p[idx].turnaround_time;
                total_waiting_time += p[idx].waiting_time;
                total_response_time += p[idx].response_time;

                is_completed[idx] = 1;
                completed++;
            }
        }
        else
        {
            current_time++;
        }
    }

    intmin_arrival_time = 10000000;
    intmax_completion_time = -1;
    for (inti = 0; i < x; i++)
    {
        min_arrival_time = min(min_arrival_time, p[i].arrival_time);
        max_completion_time = max(max_completion_time, p[i].completion_time);
    }

    avg_turnaround_time = (float)total_turnaround_time / x;
    avg_waiting_time = (float)total_waiting_time / x;
    avg_response_time = (float)total_response_time / x;
    cpu_utilization = ((max_completion_time - total_idle_time) / (float)max_completion_time) * 100;
    throughput = float(x) / (max_completion_time - min_arrival_time);

    cout << endl
         << endl;

    cout << "Process\t\t"
         << "Arrival Time\t"
         << "Burst Time\t"
         << "ST\t"
         << "CT\t"
         << "TAT\t"
         << "WT\t"
         << "RT\t"
         << endl;

    for (inti = 0; i < x; i++)
    {
        cout << p[i].pid << "\t\t" << p[i].arrival_time << "\t\t" << p[i].burst_time << "\t\t"
             << p[i].start_time << "\t" << p[i].completion_time << "\t" << p[i].turnaround_time
             << "\t" << p[i].waiting_time << "\t" << p[i].response_time << "\t"
             << endl;
    }
    cout << "Average Turnaround Time = " << avg_turnaround_time << endl;
    cout << "Average Waiting Time = " << avg_waiting_time << endl;
    cout << "Average Response Time = " << avg_response_time << endl;
    cout << "CPU Utilization = " << cpu_utilization << "%" << endl;
    cout << "Throughput = " << throughput << " process/unit time" << endl;
}
